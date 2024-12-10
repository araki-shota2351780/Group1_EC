document.addEventListener("DOMContentLoaded", () => {
    const cartItemsContainer = document.getElementById("cart-items");
    const totalPriceElement = document.getElementById("total-price");

    // カートデータを取得
    fetch("cart.php")
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                cartItemsContainer.innerHTML = `<p>カート情報の取得に失敗しました: ${data.error}</p>`;
                return;
            }

            let totalPrice = 0;

            // カート内商品をリストとして表示
            data.forEach(item => {
                const productItem = document.createElement("div");
                productItem.className = "product-item";
                productItem.innerHTML = `
                    <img src="${item.image_url}" alt="${item.name}">
                    <div class="details">
                        <h2>${item.name}</h2>
                        <p>${item.description}</p>
                        <p class="price">¥${item.price.toLocaleString()}</p>
                    </div>
                    <button class="delete-button" data-id="${item.cart_id}">削除</button>
                `;
                cartItemsContainer.appendChild(productItem);

                // 合計金額を計算
                totalPrice += item.price * item.quantity;
            });

            // 合計金額を表示
            totalPriceElement.textContent = `合計金額: ¥${totalPrice.toLocaleString()}`;

            // 削除ボタンのイベントリスナーを追加
            document.querySelectorAll(".delete-button").forEach(button => {
                button.addEventListener("click", event => {
                    const cartId = event.target.dataset.id;
                    deleteCartItem(cartId);
                });
            });
        })
        .catch(error => {
            cartItemsContainer.innerHTML = `<p>エラーが発生しました: ${error.message}</p>`;
        });

    // カートアイテム削除処理
    function deleteCartItem(cartId) {
        fetch("delete_cart_item.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ cart_id: cartId }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("商品をカートから削除しました。");
                    location.reload(); // ページをリロード
                } else {
                    alert(`削除エラー: ${data.error}`);
                }
            })
            .catch(error => {
                alert(`通信エラー: ${error.message}`);
            });
    }
});
