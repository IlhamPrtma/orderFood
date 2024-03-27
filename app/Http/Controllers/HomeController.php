<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Home or Menu For Guest
     */
    public function index()
    {

        return view("pelanggan.layout.beranda",[
            'title' => 'Home',
            'brand' => 'Warrmindo Aroma',
        ]);

    }
    public function loginpage()
    {

        return view("login.loginpage",[
            'title' => 'Home',
            'brand' => 'Warrmindo Aroma',
        ]);

    }
    public function login()
    {

        return view("login.login",[
            'title' => 'Home',
            'brand' => 'Warrmindo Aroma',
        ]);

    }


    // public function invoice(Request $request)
    // {
    //     // $uuid = $request->cookie('UUID');

    //     // $orders = Checkout::where('uuid', $uuid)->get();

    //     // $groupedOrder = $orders->groupBy('menu_id');
    //     // // $latestGroupedOrder = collect();

    //     // foreach ($groupedOrder as $items => $item) {
    //     //     $latestItem = $item->sortByDesc('created_at')->first();
    //     //     $latestGroupedOrder->put($items, $latestItem);
    //     // }

    //     // return view("guest.pages.invoice", [
    //     //     'title' => 'Invoice',
    //     //     'groupedOrder' => $groupedOrder,
    //     //     'uuid' => $uuid
    //     // ]);
    // }

    // public function resetCookie()
    // {
    //     // return redirect(route('guest.menu'))->withCookie(Cookie::forget('UUID'));
    // }
}
