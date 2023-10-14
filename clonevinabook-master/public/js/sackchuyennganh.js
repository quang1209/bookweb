window.addEventListener("scroll", function () {
    let searchBar = document.querySelector(".containner-main-search");
    let scrollPosition = document.documentElement.scrollTop;

    if (scrollPosition > 140) {
        searchBar.classList.add("fixed-search-bar");
    } else {
        searchBar.classList.remove("fixed-search-bar");
    }
});
function opo() {
    const cartDiv = document.querySelector(".cart-shopping");
    let popupDiv = document.querySelector(".popup-div");
    let isVisible = false;

    if (!popupDiv) {
        popupDiv = document.createElement("div");
        popupDiv.classList.add("popup-div");
        popupDiv.className = "popup-nicexu";
        popupDiv.classList.add("containner-asbc");

        document.body.appendChild(popupDiv);
    }

    if (cartDiv) {
        console.log("Cart div found");

        cartDiv.addEventListener("click", function (event) {
            console.log("Click event triggered");

            event.stopPropagation();

            if (isVisible) {
                popupDiv.style.display = "none";
                isVisible = false;
            } else {
                popupDiv.style.display = "block";
                isVisible = true;
            }

            localStorage.setItem(
                "popupVisibility",
                isVisible ? "visible" : "hidden"
            );
        });

        document.body.addEventListener("click", function (event) {
            const targetElement = event.target;
            if (targetElement !== cartDiv && targetElement !== popupDiv) {
                popupDiv.style.display = "none";
                isVisible = false;

                localStorage.setItem("popupVisibility", "hidden");
            }
        });
    } else {
        console.log("Cart div not found");
    }

    const storedVisibility = localStorage.getItem("popupVisibility");
    if (storedVisibility === "visible") {
        popupDiv.style.display = "block";
        isVisible = true;
    } else {
        popupDiv.style.display = "none";
        isVisible = false;
    }
    function formatPrice(price) {
        return price.toLocaleString("en-US", {
            style: "currency",
            currency: "VND",
            minimumFractionDigits: 0,
            maximumFractionDigits: 0,
        });
    }
}
function formatPrice(price) {
    return price.toLocaleString("en-US", {
        style: "currency",
        currency: "VND",
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
    });
}
function formatPrice(price) {
    return price.toLocaleString("vi-VN") + "đ";
}

function showSelectedBooks() {
    const selectedBooks = JSON.parse(localStorage.getItem("selectedBooks"));
    const containerElement = document.querySelector(".containner-asbc");
    const totalBookElement = document.querySelector(".total-book");

    let totalPrice = 0;

    if (selectedBooks && selectedBooks.length > 0) {
        selectedBooks.forEach(function (selectedBook) {
            const bookElement = document.createElement("div");
            bookElement.className = "container-buy";
            const divBig = document.createElement("div");
            divBig.className = "divbig-css";

            const innerDivElement = document.createElement("div");
            innerDivElement.className = "inner-div";

            const titleElement = document.createElement("h3");
            titleElement.textContent = selectedBook.name;
            titleElement.className = "h3-buy";

            const priceElement = document.createElement("p");
            priceElement.className = "p-buy";
            const spanElement = document.createElement("span");
            spanElement.className = "color-red";

            const priceString = selectedBook.price
                .replace(".", "")
                .replace("đ", "");
            const price = parseInt(priceString);

            const subTotal = price * 1;

            totalPrice += subTotal;

            spanElement.textContent = "1 x " + formatPrice(subTotal);
            priceElement.appendChild(spanElement);

            const imageElement = document.createElement("img");
            imageElement.src = selectedBook.image;
            imageElement.alt = selectedBook.name;
            imageElement.className = "hello";

            const deleteTextElement = document.createElement("span");
            deleteTextElement.textContent = "X";
            deleteTextElement.className = "delete-text";
            bookElement.appendChild(deleteTextElement);

            bookElement.addEventListener("mouseenter", function (event) {
                event.stopPropagation();
                deleteTextElement.style.display = "inline-block";
            });

            bookElement.addEventListener("mouseleave", function (event) {
                event.stopPropagation();
                deleteTextElement.style.display = "none";
            });
            deleteTextElement.addEventListener("click", function (event) {
                event.stopPropagation();
                bookElement.remove();
                totalPrice -= subTotal;
                totalElement.textContent =
                    "Tổng tiền: " + formatPrice(totalPrice);
                // const updatedSelectedBooks = selectedBooks.filter(function (book) {
                //   return book.name !== selectedBook.name && book.id !== selectedBook.id;
                // });
                // updateTotalBookCount(updatedSelectedBooks.length - 1);
                // localStorage.setItem(
                //   "selectedBooks",
                //   JSON.stringify(updatedSelectedBooks)
                // );
            });

            const divTotal = document.createElement("div");
            divTotal.className = "div-total";

            const divIntotal = document.createElement("div");
            divIntotal.className = "div-in-total";

            const spanIntototal = document.createElement("span");
            spanIntototal.textContent = "Tổng Cộng:";

            const intoSpan = document.createElement("span");
            intoSpan.className = "color-red";

            const aLink = document.createElement("a");
            aLink.className = "a-link-nicexu";

            innerDivElement.appendChild(titleElement);
            innerDivElement.appendChild(priceElement);
            // bookElement.appendChild(deleteButton);
            bookElement.appendChild(deleteTextElement);

            bookElement.appendChild(innerDivElement);
            bookElement.appendChild(imageElement);
            divBig.appendChild(bookElement);

            containerElement.appendChild(divBig);
        });

        const totalElement = document.createElement("div");
        totalElement.className = "total-price";
        totalElement.textContent = "Tổng tiền: " + formatPrice(totalPrice);

        containerElement.appendChild(totalElement);
        updateTotalBookCount(selectedBooks.length);
    } else {
        totalBookElement.textContent = "0";
    }
}

function updateTotalBookCount(count) {
    const totalBookElement = document.querySelector(".total-book");
    totalBookElement.textContent = count.toString();
}

function hover(event) {
    const target = event.target;
    var tooltipText = "";

    if (target.classList.contains("hover-free")) {
        tooltipText = "Miễn phí giao hàng toàn quốc cho đơn hàng từ 250.000đ";
    } else if (target.classList.contains("hover-book")) {
        tooltipText =
            "  Với hơn 80,000 đầu sách trong mọi lĩnh vực (và tiếp tục tăng mỗi ngày), Vinabook.com tự hào là nhà sách trên mạng có số lượng đầu sách lớn nhất Việt Nam, bạn có thể tìm được bất kỳ quyển sách nào cho mọi nhu cầu đọc sách của bạn.";
    } else if (target.classList.contains("hover-phone")) {
        tooltipText =
            "Hơn 10,000 tựa sách và tạp chí trong thư viện sách khổng lồ của Vinabook Reader mọi lúc mọi nơi chỉ từ 825đ/ngày";
    }

    if (tooltipText !== "") {
        var tooltip = document.createElement("div");
        tooltip.className = "tool-tip";
        tooltip.textContent = tooltipText;
        target.appendChild(tooltip);
    }
}

function removeTooltip(event) {
    const target = event.target;
    const tooltip = target.querySelector(".tool-tip");
    if (tooltip) {
        target.removeChild(tooltip);
    }
}

const hoverElements = document.querySelectorAll(
    ".hover-free, .hover-book, .hover-phone"
);
hoverElements.forEach(function (element) {
    element.addEventListener("mouseover", hover);
    element.addEventListener("mouseout", removeTooltip);
});

const searchInput = document.getElementById("searchInput");
const searchResults = document.getElementById("searchResults");

searchInput.addEventListener("input", function () {
    const searchValue = searchInput.value;

    performSearch(searchValue);
});
function modal() {
    const login = document.querySelector(".js-log");
    const modal = document.querySelector(".modal");
    const closemodal = document.querySelector(".js-modal-close");

    function loginformopen(event) {
        event.preventDefault();
        modal.classList.add("open");
    }

    function loginformclose() {
        modal.classList.remove("open");
    }

    if (login) {
        login.addEventListener("click", loginformopen);
    }
    if (closemodal) {
        closemodal.addEventListener("click", loginformclose);
    }
}

modal();

document.addEventListener("click", function (event) {
    const isClickedInsideSearch = searchInput.contains(event.target);
    if (!isClickedInsideSearch) {
        searchResults.innerHTML = "";
    }
});

function performSearch(query) {
    searchResults.innerHTML = "";
    const filteredBooks = book.filter(function (book) {
        return book.name.toLowerCase().includes(query.toLowerCase());
    });

    filteredBooks.forEach(function (book) {
        const li = document.createElement("li");
        li.textContent = book.name;
        li.addEventListener("click", function () {
            window.location.href = "thongtinbook?bookIndex=" + book.id;
        });
        searchResults.appendChild(li);
    });
}

document.addEventListener("DOMContentLoaded", function () {
    opo();
    showSelectedBooks();
    hover();
    modal();
});
