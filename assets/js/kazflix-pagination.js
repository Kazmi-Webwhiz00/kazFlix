// jQuery(document).ready(function ($) {

//     /// Update this js for ajx base pagintaion as per now commented this file


//     // const $prevButton = $("#kazflix-prev-page");
//     // const $nextButton = $("#kazflix-next-page");
//     // const $currentPage = $("#kazflix-current-page");
//     // const $totalPages = $("#kazflix-total-pages");

//     // let currentPageNumber = parseInt($currentPage.text());
//     // const totalPageCount = parseInt($totalPages.text());

//     // function navigateToPage(pageNumber) {
//     //     const baseUrl = window.location.origin + window.location.pathname; // Ensure only the base URL without hash or query
//     //     const queryParams = new URLSearchParams(window.location.search);

//     //     // Always set the page parameter, even for page 1
//     //     queryParams.set("page", pageNumber);

//     //     // Construct the full URL and redirect
//     //     const newUrl = `${baseUrl}?${queryParams.toString()}`;
//     //     window.location.href = newUrl;
//     // }

//     // $prevButton.on("click", function () {
//     //     if (currentPageNumber > 1) {
//     //         currentPageNumber--; // Decrement the current page
//     //         navigateToPage(currentPageNumber); // Navigate to the previous page
//     //     }
//     // });

//     // $nextButton.on("click", function () {
//     //     if (currentPageNumber < totalPageCount) {
//     //         currentPageNumber++; // Increment the current page
//     //         navigateToPage(currentPageNumber); // Navigate to the next page
//     //     }
//     // });

//     // // Ensure buttons are properly enabled/disabled based on the current page
//     // function updateButtonState() {
//     //     $prevButton.prop("disabled", currentPageNumber <= 1); // Disable on the first page
//     //     $nextButton.prop("disabled", currentPageNumber >= totalPageCount); // Disable on the last page
//     // }

//     // updateButtonState();
// });


jQuery(document).ready(function ($) {
    $(".kazflix-pagination-arrow").on("click", function () {
        if (!$(this).prop("disabled")) {
            const targetUrl = $(this).data("url");
            window.location.href = targetUrl; // Redirect to the URL
        }
    });
});
