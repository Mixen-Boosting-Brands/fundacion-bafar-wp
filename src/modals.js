// Images
document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById("modal-image");

    modalElement.addEventListener("shown.bs.modal", function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const imageUrl = button.getAttribute("data-bs-image"); // Extract info from data-* attribute
        const modalImage = modalElement.querySelector("img"); // Get the image element inside the modal

        modalImage.src = imageUrl; // Update the image src attribute
    });
});

// Videos
document.addEventListener("DOMContentLoaded", function () {
    const modalElement = document.getElementById("modal-video");
    const modalVideo = modalElement.querySelector("iframe"); // Get the iframe element inside the modal

    modalElement.addEventListener("shown.bs.modal", function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const videoUrl = button.getAttribute("data-bs-video-src"); // Extract info from data-* attribute

        modalVideo.src = videoUrl; // Update the video src attribute
    });

    modalElement.addEventListener("hidden.bs.modal", function (event) {
        modalVideo.src = ""; // Update the video src attribute
    });
});
