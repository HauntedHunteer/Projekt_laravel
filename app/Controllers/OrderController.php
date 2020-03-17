<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Redirect;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {

    public function zamowienia() {
        if (Auth::check()) {
            $orders = Order::all()->where('id_user', Auth()->user()->id)->where('status', '!=', 'wycofane');
            return view('zamowienia', compact('orders'));
        }
        return Redirect::to("login");
    }

    public function store(Request $request) {
        $request->validate([
            'forename' => 'required|min:3|regex:/(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$/|max:15',
            'name' => 'required|min:4|regex:/(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$/|max:32',
            'email' => 'required|email|max:100',
            'tel_number' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{3}/|max:11',
            'payments_methods' => 'required|in:PayPal,DotPay,Przelew,Karta',
            'products' => 'required'
        ]);
        //zapis
        $order = new Order();
        $order->id_user = Auth::user()->id;
        $order->forename = $request->get('forename');
        $order->name = $request->get('name');
        $order->email = $request->get('email');
        $order->tel_number = $request->get('tel_number');
        $order->payments_methods = $request->get('payments_methods');
        //-------------------------------------------produkty/ceny
        $result = $request->input('products');
        $value = array();
        $name = array();
        $amount = 0;
        $j = 0;
        foreach ($result as $line) {
            $i = 0;
            $value = explode(";", $line);
            $name[$j] = $value[$i];
            $i++;
            $amount += intval($value[$i]);
            $j++;
        }
        $order->products = join(",", $name);
        $order->amount = $amount;
        //-------------------------------------------
        $order->status = 'aktywne';

        $order->save();

        return Redirect::to("zamowienia");
    }

    public function edit(Request $request) {
        $id = $request->get('id');
        if (Auth::check() && $id != null) {
            $order = Order::find($id);
            return view('edycja', compact('order'));
        }
        return Redirect::to("startowa");
    }

    public function destroy(Request $request) {
        $order = Order::find($request->get('id'));
        $order->update(['status' => 'wycofane']);
        return Redirect::to("zamowienia");
    }
    
    public function update(Request $request) {
        $request->validate([
            'forename' => 'required|min:3|regex:/(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$/|max:15',
            'name' => 'required|min:4|regex:/(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$/|max:32',
            'email' => 'required|email|max:100',
            'tel_number' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{3}/|max:11',
            'payments_methods' => 'required|in:PayPal,DotPay,Przelew,Karta',
            'products' => 'required'
        ]);
        //edycja
        $order = Order::find($request->get('id'));
        $order->forename = $request->get('forename');
        $order->name = $request->get('name');
        $order->email = $request->get('email');
        $order->tel_number = $request->get('tel_number');
        $order->payments_methods = $request->get('payments_methods');
        //-------------------------------------------produkty/ceny
        $result = $request->input('products');
        $value = array();
        $name = array();
        $amount = 0;
        $j = 0;
        foreach ($result as $line) {
            $i = 0;
            $value = explode(";", $line);
            $name[$j] = $value[$i];
            $i++;
            $amount += intval($value[$i]);
            $j++;
        }
        $order->products = join(",", $name);
        $order->amount = $amount;
        //-------------------------------------------
        $order->update();
        return Redirect::to("zamowienia");
    }

    //$order->products = join(",", $request->input('products'));
    //->select('forename', 'name', 'email', 'tel_number', 'payments_methods', 'products', 'amount', 'status', 'updated_at')
    /* for($i = 0; $i < count($result); $i++) {
      $value = explode(";", $result[$i]);
      $name[$i] = $value[$i];
      $prices[$i] = $value[$i + 1];
      }
      for($i = 0; $i < count($prices); $i++) {
      $amount += intval($prices[$i]);
      }
     * <!--<td><a href="/dashboard/reservations/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">Edit</a></td>-->
     */

    /* public function create(array $data) {
      return Order::create([
      'id_user' => Auth::user()->id,
      'forename' => $data['forename'],
      'name' => $data['name'],
      'email' => $data['email'],
      'tel_number' => $data['tel_number'],
      'payments_methods' => $data['payments_methods'],
      //'products' => $data['products'],
      'status' => 'aktywne'
      ]);
      }
      public function store(Request $request) {
      $request->validate([
      'forename' => 'required|min:4|max:32',
      'name' => 'required|min:3|max:15',
      'email' => 'required|email|max:100',
      'tel_number' => 'required|regex:/[0-9]{3}-[0-9]{3}-[0-9]{3}|max:11',
      'payments_methods' => 'required|in:PayPal,DotPay,Przelew,Karta',
      'products' => 'required'
      ]);
      $data = $request->all();
      $order = $this->create($data);
      $order->save();
      return Redirect::to("startowa");
      }

      public function create(array $data) {
      return Order::create([
      'id_user' => Auth()->user()->id,
      'forename' => $data['forename'],
      'name' => $data['name'],
      'email' => $data['email'],
      'tel_number' => $data['tel_number'],
      'payments_methods' => $data['payments_methods'],
      'status' => 'aktywne',
      ]);
      } */
}
