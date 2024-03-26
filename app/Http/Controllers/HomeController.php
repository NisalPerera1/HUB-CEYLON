<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }

    public function dashboard()
    {
        return view('selleraccount.dashboard');
    }

    public function sellerProfile()
    {
        return view('selleraccount.profile.profile');
    }


    public function purchaseHistory()
    {
        return view('selleraccount.profile.PurchaseHistory');
    }
    public function downloads()
    {
        return view('selleraccount.profile.Downloads');
    }
    public function refund()
    {
        return view('selleraccount.profile.RefundRequest');
    }
    public function wishlist()
    {
        return view('selleraccount.profile.WishList');
    }
    public function classifiedProducts()
    {
        return view('selleraccount.profile.ClassifiedProducts');
    }
    public function Biddedproducts()
    {
        return view('selleraccount.profile.BiddedProducts');
    }

    public function conversations()
    {
        return view('selleraccount.profile.Conversations');
    }
    public function mywallet()
    {
        return view('selleraccount.profile.MyWallet');
    }
    public function earnings()
    {
        return view('selleraccount.profile.EarningPoints');
    }
    public function affiliate()
    {
        return view('selleraccount.profile.AffliateHistory');
    }
    public function support()
    {
        return view('selleraccount.profile.SupportTickets');
    }

    public function Auction()
    {
        return view('selleraccount.profile.AuctionPurchaseHistory');
    }

    public function ManageAccount($userId)
    {
        $user = User::findOrFail($userId);
    
        return view('selleraccount.profile.ManageAccount', compact('user'));
    }

    
    
}
