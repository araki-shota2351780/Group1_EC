document.addEventListener("DOMContentLoaded", () => {
    const merchandiseGrid = document.getElementById("merchandise-grid");
    const tabs = document.querySelectorAll(".tab");
    const sizeFilters = document.querySelectorAll(".size-filter");

    let currentCategory = null; // 現在のカテゴリ
    let selectedSize = null;   // 現在のサイズ

    // 初期データ取得
    fetchMerchandise();

    // カテゴリタブのクリックイベント
    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            tabs.forEach((t) => t.classList.remove("active"));
            tab.classList.add("active");
            currentCategory = tab.dataset.category;

            fetchMerchandise();
        });
    });

    // サイズフィルタのクリックイベント
    sizeFilters.forEach((filter) => {
        filter.addEventListener("click", () => {
            sizeFilters.forEach((f) => f.classList.remove("active"));
            filter.classList.add("active");
            selectedSize = filter.dataset.size;

            fetchMerchandise();
        });
    });

    // サーバーから商品データを取得してレンダリング
    function fetchMerchandise() {
        const params = new URLSearchParams();
        if (currentCategory) params.append("category", currentCategory);
        if (selectedSize) params.append("size", selectedSize);

        fetch(`/AsoEC/php/merchandise.php?${params.toString()}`)
            .then((response) => response.json())
            .then((data) => {
                renderMerchandise(data);
            })
            .catch((error) => {
                merchandiseGrid.innerHTML = `<p>エラーが発生しました: ${error.message}</p>`;
            });
    }

    // 商品を表示する関数
    function renderMerchandise(items) {
        merchandiseGrid.innerHTML = ""; // グリッドを初期化

        if (items.length === 0) {
            merchandiseGrid.innerHTML = "<p>該当する商品が見つかりません。</p>";
            return;
        }

        items.forEach((item) => {
            // フィルタリング条件：サイズが選択されている場合のみ、そのサイズの商品を表示
            if (selectedSize && !item.merch_id.includes(selectedSize)) {
                return; // サイズが一致しない場合はスキップ
            }

            const itemElement = createMerchandiseItem(item);
            merchandiseGrid.appendChild(itemElement);
        });
    }

    // 商品アイテムを作成
    function createMerchandiseItem(item) {
        const div = document.createElement("div");
        div.classList.add("merchandise-item");

        div.innerHTML = `
            <img src="${item.image_url}" alt="${item.name}">
            <h3>${item.name}</h3>
            <p>価格: ¥${item.price.toLocaleString()}</p>
            <button class="details-btn">詳細を見る</button>
            <div class="details" style="display: none;">
                <p>${item.description}</p>
            </div>
        `;

        const detailsBtn = div.querySelector(".details-btn");
        const detailsDiv = div.querySelector(".details");

        detailsBtn.addEventListener("click", () => {
            const isVisible = detailsDiv.style.display === "block";
            detailsDiv.style.display = isVisible ? "none" : "block";
            detailsBtn.textContent = isVisible ? "詳細を見る" : "閉じる";
        });

        return div;
    }
});
