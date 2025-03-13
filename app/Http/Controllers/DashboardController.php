<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    //use bavix transaction model
    use Bavix\Wallet\Models\Transaction;

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
            $transactions = Transaction::simplePaginate(10);
            $transactionsTotal = Transaction::all()->count();

            return view('pages.dashboard.transactions.index', [
                'transactions' => $transactions,
                'transactionsTotal' => $transactionsTotal
            ]); // Or consolidated transactions view
        }

        public function transferHistory()
        {
            return view('pages.dashboard.transactions.transfer-history');
        }

        public function depositHistory()
        {
            return view('pages.dashboard.transactions.deposit-history');
        }

        public function withdrawalHistory()
        {
            return view('pages.dashboard.transactions.withdrawal-history');
        }

        public function loans()
        {
            return view('pages.dashboard.loans.index'); // Or loans overview page
        }

        public function requestLoan()
        {
            return view('pages.dashboard.loans.request-loan');
        }

        public function loanHistory()
        {
            return view('pages.dashboard.loans.loan-history');
        }

        public function loanDetails($loan) //Route parameter will be passed here
        {
            // You might want to fetch the loan details based on $loan id here
            return view('pages.dashboard.loans.details', ['loan' => $loan]);
        }


        public function referrals()
        {
            return view('pages.dashboard.referrals');
        }

        public function myHoldings()
        {
            return view('pages.dashboard.investments.my-holdings');
        }

        public function marketData()
        {
            return view('pages.dashboard.investments.market-data');
        }

        public function spendingAnalysis()
        {
            return view('pages.dashboard.insights.spending-analysis');
        }

        public function fundsManagement()
        {
            return view('pages.dashboard.insights.funds-management');
        }

        public function notifications()
        {
            return view('pages.dashboard.notifications');
        }

        public function account()
        {
            return view('pages.dashboard.account');
        }

        public function settings()
        {
            return view('pages.dashboard.settings');
        }

    }
