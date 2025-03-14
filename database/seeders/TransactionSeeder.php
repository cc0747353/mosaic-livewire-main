<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Bavix\Wallet\Models\Transaction;

class TransactionSeeder extends Seeder
{
    protected $data = [
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 10,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'd0d1f4af-c186-4189-baa5-0bf98c5449b8',
            'created_at' => '2025-03-12 16:34:19',
            'updated_at' => '2025-03-12 16:34:19',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -1,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => '441a962c-5eae-4009-b017-38d46fa514ed',
            'created_at' => '2025-03-12 16:34:19',
            'updated_at' => '2025-03-12 16:34:19',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -200,
            'confirmed' => 1,
            'meta' => '{"description": "payment of taxes"}',
            'uuid' => 'af6a9906-93ad-4261-bc5b-3222cf6d014f',
            'created_at' => '2025-03-12 16:34:20',
            'updated_at' => '2025-03-12 16:34:20',
        ],

        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 50,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'b1d1f4af-c186-4189-baa5-0bf98c5449b9',
            'created_at' => '2025-03-12 16:34:21',
            'updated_at' => '2025-03-12 16:34:21',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -5,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'c1d1f4af-c186-4189-baa5-0bf98c5449c0',
            'created_at' => '2025-03-12 16:34:22',
            'updated_at' => '2025-03-12 16:34:22',
        ],
        // Additional 15 data entries
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 100,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'd1d1f4af-c186-4189-baa5-0bf98c5449d1',
            'created_at' => '2025-03-12 16:34:23',
            'updated_at' => '2025-03-12 16:34:23',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -10,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'e1d1f4af-c186-4189-baa5-0bf98c5449d2',
            'created_at' => '2025-03-12 16:34:24',
            'updated_at' => '2025-03-12 16:34:24',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 20,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'f1d1f4af-c186-4189-baa5-0bf98c5449d3',
            'created_at' => '2025-03-12 16:34:25',
            'updated_at' => '2025-03-12 16:34:25',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -15,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'g1d1f4af-c186-4189-baa5-0bf98c5449d4',
            'created_at' => '2025-03-12 16:34:26',
            'updated_at' => '2025-03-12 16:34:26',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 30,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'h1d1f4af-c186-4189-baa5-0bf98c5449d5',
            'created_at' => '2025-03-12 16:34:27',
            'updated_at' => '2025-03-12 16:34:27',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -25,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'i1d1f4af-c186-4189-baa5-0bf98c5449d6',
            'created_at' => '2025-03-12 16:34:28',
            'updated_at' => '2025-03-12 16:34:28',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 40,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'j1d1f4af-c186-4189-baa5-0bf98c5449d7',
            'created_at' => '2025-03-12 16:34:29',
            'updated_at' => '2025-03-12 16:34:29',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -35,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'k1d1f4af-c186-4189-baa5-0bf98c5449d8',
            'created_at' => '2025-03-12 16:34:30',
            'updated_at' => '2025-03-12 16:34:30',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 60,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'l1d1f4af-c186-4189-baa5-0bf98c5449d9',
            'created_at' => '2025-03-12 16:34:31',
            'updated_at' => '2025-03-12 16:34:31',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -45,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'm1d1f4af-c186-4189-baa5-0bf98c5449da',
            'created_at' => '2025-03-12 16:34:32',
            'updated_at' => '2025-03-12 16:34:32',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 70,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'n1d1f4af-c186-4189-baa5-0bf98c5449db',
            'created_at' => '2025-03-12 16:34:33',
            'updated_at' => '2025-03-12 16:34:33',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -55,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'o1d1f4af-c186-4189-baa5-0bf98c5449dc',
            'created_at' => '2025-03-12 16:34:34',
            'updated_at' => '2025-03-12 16:34:34',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'deposit',
            'amount' => 80,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'p1d1f4af-c186-4189-baa5-0bf98c5449dd',
            'created_at' => '2025-03-12 16:34:35',
            'updated_at' => '2025-03-12 16:34:35',
        ],
        [

            'payable_type' => 'App\Models\User',
            'payable_id' => 1,
            'wallet_id' => 1,
            'type' => 'withdraw',
            'amount' => -65,
            'confirmed' => 1,
            'meta' => null,
            'uuid' => 'q1d1f4af-c186-4189-baa5-0bf98c5449de',
            'created_at' => '2025-03-12 16:34:36',
            'updated_at' => '2025-03-12 16:34:36',
        ],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->data as $d) {
            Transaction::create([
                'payable_type' => $d['payable_type'],
                'payable_id' => $d['payable_id'],
                'wallet_id' => $d['wallet_id'],
                'type' => $d['type'],
                'amount' => $d['amount'],
                'confirmed' => $d['confirmed'],
                'meta' => $d['meta'],
                'uuid' => $d['uuid'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
