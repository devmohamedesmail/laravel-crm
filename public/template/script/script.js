let table = new DataTable('#myTable', {
    responsive: true,  // Enables responsiveness
    paging: true,      // Enables pagination
    searching: true,   // Enables search box
    ordering: true,    // Enables sorting
    info: true,        // Shows table information
    lengthMenu: [10, 25, 50, 100, -1], // Dropdown for entries per page (-1 for "All")
    
})



// sidebar toggle
let sidebar = document.querySelector('.sidebar')
let sidebarBtn = document.querySelector('.sidebarBtn')
sidebarBtn.addEventListener('click', () => {
   
    sidebar.classList.toggle('w-fit')
    sidebarBtn.classList.toggle('active')
})