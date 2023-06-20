
document.addEventListener('DOMContentLoaded', function() {
    var galleryElements = document.querySelectorAll('.column a');
    var shareButton = document.querySelector('.share-button');
    var galleryItems = [];
    
    for (var i = 0; i < galleryElements.length; i++) {
        var item = {
            src: galleryElements[i].getAttribute('href'),
            w: parseInt(galleryElements[i].getAttribute('data-size').split('x')[0]),
            h: parseInt(galleryElements[i].getAttribute('data-size').split('x')[1])
        };
        
        galleryItems.push(item);
        
        galleryElements[i].addEventListener('click', function(e) {
            e.preventDefault();
            var index = Array.from(galleryElements).indexOf(this);
            openPhotoSwipe(index);
        });
    }
    shareButton.addEventListener('click', function () {
        // Retrieve the current image URL
        var currentSlide = gallery.currItem;
        var imageURL = currentSlide.src;

        // Construct the Facebook share URL with the image URL
        var facebookShareURL = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(imageURL);

        // Open the Facebook share dialog in a new window
        window.open(facebookShareURL, 'Facebook Share', 'width=600,height=600');
    });
    function openPhotoSwipe(index) {
        var pswpElement = document.querySelectorAll('.pswp')[0];
        
        var options = {
            index: index,
            bgOpacity: 0.8,
            showHideOpacity: true
        };
        
        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, galleryItems, options);
        gallery.init();
    }
});