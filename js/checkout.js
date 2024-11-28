function redirectToPage() {
    // ラジオボタンの選択値を取得
    var selectedPayment = document.querySelector('input[name="payment[]"]:checked');
    
    // 選択がない場合は処理を終了
    if (!selectedPayment) {
        alert("支払い方法を選択してください。");
        return;
    }

    // 選択された支払い方法によって遷移先を決定
    var paymentMethod = selectedPayment.value;

    // 遷移先のURLを設定
    var url = "";
    switch (paymentMethod) {
        case "クレジットカード":
            url = "http://aso2301212.mods.jp/EC/checkout/credit_card_payment.php"; // クレジットカードのページ
            break;
        case "代金引換":
            url = ""; // 代金引換は決済完了画面に遷移する
            break;
        case "コンビニ":
            url = "http://aso2301212.mods.jp/EC/checkout/Conveni.php"; // コンビニ決済のページ
            break;
        default:
            alert("無効な支払い方法が選ばれました。");
            return;
    }

    // フォームのaction属性を設定
    var form = document.getElementById("paymentForm");
    form.action = url;

    // フォームを送信
    form.submit();

}
