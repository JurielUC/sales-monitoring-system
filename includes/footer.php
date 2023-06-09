    </body>
    <!--JS Scripts for datatables plugin-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <!-- Include the PDFMake library for PDF export -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pdfmake/build/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pdfmake/build/vfs_fonts.js"></script>
	<!-- Include the JSZip library for Excel export -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable(
                {
                    dom: 'lBfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
                }
            );
        } );
        
    </script>
</html>