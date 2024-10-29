ルートディレクトリ/
├── index.html                 （ホーム画面）
├── login.html                 （ログイン画面）
├── register.html              （新規登録画面）
├── reset-password.html        （パスワード再設定画面）
├── product-search.html        （商品検索画面）
├── mypage.html                （マイページ：購入履歴、ユーザ情報、プライバシーポリシー）
├── cart.html                  （カート画面）
├── checkout.html              （購入情報登録画面）
├── payment.html               （決済画面）
├── payment-complete.html      （決済完了画面）
│
├── css/                       （スタイルシートディレクトリ）
│   ├── style.css              （共通の基本スタイル）
│   ├── header.css             （ヘッダー用スタイル）
│   ├── footer.css             （フッター用スタイル）
│   ├── login.css              （ログイン画面専用のスタイルなど、必要に応じて追加）
│   └── その他各画面用CSS
│
├── js/                        （JavaScriptディレクトリ）
│   ├── main.js                （共通のJavaScript）
│   ├── auth.js                （認証関連：ログイン、登録、パスワードリセット用）
│   ├── product.js             （商品検索や商品関連機能）
│   ├── cart.js                （カート関連の処理）
│   └── checkout.js            （購入手続きや決済関連の処理）
│
├── assets/                    （画像やフォントなどのアセット）
│   ├── images/                （商品画像やロゴ、その他画像）
│   ├── fonts/                 （カスタムフォントファイル）
│   └── icons/                 （アイコンファイル：SVGやPNGなど）
│
└── partials/                  （共通パーツディレクトリ：必要に応じて）
    ├── header.html            （ヘッダー部分）
    └── footer.html            （フッター部分）