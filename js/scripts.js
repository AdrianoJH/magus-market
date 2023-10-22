document.addEventListener("DOMContentLoaded", function () {
    const imgFilterHeader = document.getElementById('img-filter-header');
    const filterExpandedHeader = document.querySelectorAll('.filter-header-expanded');
    const filterHeader = document.querySelector('.filter-header');
    const imgSearch = document.getElementById('img-search');
    const borderRightHeader = document.getElementById('border-right-header');

    const originalBorderRadiusHeader = parseInt(window.getComputedStyle(filterHeader).borderRadius, 10);
    const originalPaddingTopHeader = parseInt(window.getComputedStyle(filterHeader).paddingTop, 10);

    const logo = document.querySelector('.btn');
    const imgDiv = document.querySelector('.img');

    imgSearch.addEventListener('click', function () {
        if (window.innerWidth <= 768) {
            logo.style.display = 'none';
            imgDiv.style.display = 'none';
            filterHeader.style.width = '90%';
        }
    });

    let isFilterHeaderVisible = false;
    imgFilterHeader.style.display = 'none';
    borderRightHeader.style.display = 'none';
    logo.style.display = 'block';
    imgDiv.style.display = 'flex';
    filterHeader.style.width = '55%';

    imgSearch.addEventListener('click', function () {
        if (isFilterHeaderVisible) {
            imgFilterHeader.style.display = 'none';
            borderRightHeader.style.display = 'none';
            logo.style.display = 'block';
            imgDiv.style.display = 'block';
            filterHeader.style.width = '55%';

        } else {
            imgFilterHeader.style.display = 'block';
            borderRightHeader.style.display = 'flex';
        }
        isFilterHeaderVisible = !isFilterHeaderVisible;
    });

    imgFilterHeader.addEventListener('click', function () {
        filterExpandedHeader.forEach(function (item) {
            if (item.style.display === 'none' || item.style.display === '') {
                item.style.display = 'flex';
                filterHeader.style.borderRadius = '30px';
                filterHeader.style.paddingTop = '20px';
            } else {
                item.style.display = 'none';
                filterHeader.style.borderRadius = originalBorderRadiusHeader + 'px';
                filterHeader.style.paddingTop = originalPaddingTopHeader + 'px';
            }
        });
    });

    const imgFilter = document.getElementById('img-filter');
    const filterExpanded = document.querySelectorAll('.filter-expanded');
    const filter = document.querySelector('.filter');

    const originalBorderRadius = parseInt(window.getComputedStyle(filter).borderRadius, 10);
    const originalPaddingTop = parseInt(window.getComputedStyle(filter).paddingTop, 10);

    imgFilter.addEventListener('click', function () {
        filterExpanded.forEach(function (item) {
            if (item.style.display === 'none' || item.style.display === '') {
                item.style.display = 'flex';
                filter.style.borderRadius = '30px';
                filter.style.paddingTop = '20px';
            } else {
                item.style.display = 'none';
                filter.style.borderRadius = originalBorderRadius + 'px';
                filter.style.paddingTop = originalPaddingTop + 'px';
            }
        });
    });

    let cards = $(".card");
    let numCards = cards.length;
    let perPage = 12;
    cards.slice(perPage).hide();
    let totalPages = Math.ceil(numCards / perPage);
    let currentPage = 1;

    showPage(1);
    $(".pagination-link[rel='1']").addClass("active");

    const maxPagesToShow = 4;
    let startPage = 1;
    let endPage = Math.min(totalPages, maxPagesToShow);

    function updatePagination() {
        $("#pagination").empty();

        if (totalPages > maxPagesToShow && currentPage > 3) {
            $("#pagination").append(`<a class="pagination-link" rel="1">1</a>`);
            if (currentPage > 3) {
                $("#pagination").append(`<span class="pagination-dots">...</span>`);
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            if (i === currentPage) {
                $("#pagination").append(`<a class="pagination-link active" rel="${i}">${i}</a>`);
            } else {
                $("#pagination").append(`<a class="pagination-link" rel="${i}">${i}</a>`);
            }
        }

        if (totalPages > maxPagesToShow && currentPage < totalPages - 2) {
            if (currentPage < totalPages - 3) {
                $("#pagination").append(`<span class="pagination-dots">...</span>`);
            }
            $("#pagination").append(`<a class="pagination-link" rel="${totalPages}">${totalPages}</a>`);
        }

        $(".pagination-link").on("click", function () {
            let pageNum = $(this).attr("rel");
            showPage(pageNum);

            $(".pagination-link").removeClass("active");
            $(this).addClass("active");
        });
    }

    $("#prevBtn").on("click", function () {
        if (currentPage > 1) {
            currentPage--;
            if (currentPage < startPage) {
                startPage = currentPage;
                endPage = Math.min(startPage + maxPagesToShow - 1, totalPages);
                updatePagination();
            }
            showPage(currentPage);
        }
    });

    $("#nextBtn").on("click", function () {
        if (currentPage < totalPages) {
            currentPage++;
            if (currentPage > endPage) {
                endPage = currentPage;
                startPage = Math.max(endPage - maxPagesToShow + 1, 1);
                updatePagination();
            }
            showPage(currentPage);
        }
    });

    updatePagination();

    function showPage(page) {
        let start = (page - 1) * perPage;
        let end = start + perPage;

        cards.hide().slice(start, end).show();
        currentPage = page;

        $(".txt-text").text(`página ${currentPage.toString().padStart(2, '0')}`);
    }
});
