<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $dataFeed = new DataFeed();

            return view('pages/dashboard/dashboard', compact('dataFeed'));
        }

        /**
         * Displays the transfer screen
         *
         */
        public function transfer()
        {
            return view('pages/dashboard/transfer');
        }

        //paymentMethod
        public function paymentMethod()
        {
            return view('pages/dashboard/payment-method');
        }

        public function transactions()
        {
            return view('dashboard.transactions.index'); // Or consolidated transactions view
        }

        public function transferHistory()
        {
            return view('dashboard.transactions.transfer-history');
        }

        public function depositHistory()
        {
            return view('dashboard.transactions.deposit-history');
        }

        public function withdrawalHistory()
        {
            return view('dashboard.transactions.withdrawal-history');
        }

        public function loans()
        {
            return view('dashboard.loans.index'); // Or loans overview page
        }

        public function requestLoan()
        {
            return view('dashboard.loans.request-loan');
        }

        public function loanHistory()
        {
            return view('dashboard.loans.loan-history');
        }

        public function loanDetails($loan) //Route parameter will be passed here
        {
            // You might want to fetch the loan details based on $loan id here
            return view('dashboard.loans.details', ['loan' => $loan]);
        }


        public function referrals()
        {
            return view('dashboard.referrals');
        }

        public function myHoldings()
        {
            return view('dashboard.investments.my-holdings');
        }

        public function marketData()
        {
            return view('dashboard.investments.market-data');
        }

        public function spendingAnalysis()
        {
            return view('dashboard.insights.spending-analysis');
        }

        public function fundsManagement()
        {
            return view('dashboard.insights.funds-management');
        }

        public function notifications()
        {
            return view('dashboard.notifications');
        }

        public function account()
        {
            return view('dashboard.account');
        }

        public function settings()
        {
            return view('dashboard.settings');
        }

    }
