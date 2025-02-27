<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>




<script>
    let table = new DataTable('#myTable', {
        responsive: true, // Enables responsiveness
        paging: true, // Enables pagination
        searching: true, // Enables search box
        ordering: true, // Enables sorting
        info: true, // Shows table information
        lengthMenu: [10, 25, 50, 100, -1], // Dropdown for entries per page (-1 for "All")

    })



    // sidebar toggle
    let sidebar = document.querySelector('.sidebar')
    let sidebarBtn = document.querySelector('.sidebarBtn')
    sidebarBtn.addEventListener('click', () => {

        sidebar.classList.toggle('w-64')
        sidebarBtn.classList.toggle('active')
    })






    // datatables styles
    const table_search = document.querySelector('#dt-search-0');
    table_search.placeholder = 'Search';




    // form submit
    const submitBtn = document.getElementByTagName('button[type="submit"]');
    submitBtn.addEventListener('click', () => {
        submitBtn.disabled = true;
        

    })



</script>

</body>

</html>
