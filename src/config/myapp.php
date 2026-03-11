<?php

/**
 * アプリケーション独自の設定ファイル
 */

return [
    // 管理画面のURIのプレフィックス
    'admin_uri_prefix' => 'admin_secrettext',

    // トレースで隠すキーリスト
    'trace_mask_keys' => [
        'password',
        'password_confirmation',
    ],
];
