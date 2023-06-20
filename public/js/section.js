var containers = document.getElementsByClassName("dids");
var totalCounts = new Array(containers.length);
var maxTotalCount = 0;
var animationSpeed = 0.005; // Adjust this value for desired animation speed

function lazyLoad() {
    var windowHeight = window.innerHeight || document.documentElement.clientHeight;
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    var loadTrigger = scrollPosition + windowHeight;

    for (let i = 0; i < containers.length; i++) {
    if (!totalCounts[i]) {
        totalCounts[i] = parseNumber(containers[i].textContent);
        maxTotalCount = Math.max(maxTotalCount, totalCounts[i]);
    }

    if (loadTrigger >= containers[i].offsetTop) {
        animateCount(i);
        window.removeEventListener("scroll", lazyLoad);
    }
    }
}

function parseNumber(number) {
    return parseInt(number.replace(/,/g, ""));
}

function formatNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function animateCount(index) {
    var start = 0;
    var end = totalCounts[index];
    var range = end - start;
    var increment = range * animationSpeed;

    var intervalId = setInterval(function() {
    start += increment;

    if (start >= end) {
        clearInterval(intervalId);
        start = end;
    }

    containers[index].textContent = formatNumber(Math.floor(start));

    }, 10); // Update the value every 10 milliseconds for smooth animation
}

window.addEventListener("scroll", lazyLoad);
lazyLoad();