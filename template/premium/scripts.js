document.getElementById('slideButton').addEventListener('click', function() {
    const container1 = document.getElementById('container1');
    const container2 = document.getElementById('container2');
    
    // Slide container 1 out of view
    container1.classList.remove('active');
    
    // Slide container 2 into view
    setTimeout(() => {
        container2.classList.add('active');
    }, 500); // Delay to match the transition duration
});