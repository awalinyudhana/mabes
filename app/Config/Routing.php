<?php

return [
    [
        "http_method" => "get",
        "route" => "/",
        "class" => "\\Mabes\\Controllers\\IndexController",
        "method" => "index",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/rebates",
        "class" => "\\Mabes\\Controllers\\RebatesController",
        "method" => "index",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "index",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/transfer-balance",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "transferBalance",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/transaction-status",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "transactionStatus",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/deposit",
        "class" => "\\Mabes\\Controllers\\DepositController",
        "method" => "getDeposit",
        "auth" => false
    ],
    [
        "http_method" => "Post",
        "route" => "/finance/deposit",
        "class" => "\\Mabes\\Controllers\\DepositController",
        "method" => "postDeposit",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/withdrawal",
        "class" => "\\Mabes\\Controllers\\WithdrawalController",
        "method" => "getWithdrawal",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/finance/withdrawal",
        "class" => "\\Mabes\\Controllers\\WithdrawalController",
        "method" => "postWithdrawal",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/bonus",
        "class" => "\\Mabes\\Controllers\\BonusController",
        "method" => "postWithdrawal",
        "auth" => false
    ],

    // ADMIN AREA

    [
        "http_method" => "get",
        "route" => "/login",
        "class" => "\\Mabes\\Controllers\\AdminController",
        "method" => "login",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/login",
        "class" => "\\Mabes\\Controllers\\AdminController",
        "method" => "login",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/administrator",
        "class" => "\\Mabes\\Controllers\\AdminController",
        "method" => "index",
        "auth" => false
    ]
];

// EOF
