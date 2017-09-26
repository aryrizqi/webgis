</div>
</div>
<!-- Mainly scripts -->

    <script src="<?php echo base_url('assets/inspinia/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>
    <?php 
    if (isset($file)) {
    } else {
    ?>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <?php } ?>
        <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/inspinia/js/inspinia.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/pace/pace.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/pdfjs/pdf.js') ?>"></script>
    
    <script src="<?php echo base_url('assets/inspinia/js/plugins/jeditable/jquery.jeditable.js') ?>"></script>

            <!-- Data Tables -->
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.responsive.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.tableTools.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/blueimp/jquery.blueimp-gallery.min.js"') ?>"></script>




    <script src="<?php echo base_url('assets/inspinia/js/plugins/chosen/chosen.jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/select2/select2.full.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/tinymce/js/tinymce/tinymce.dev.js'); ?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/table/plugin.dev.js'); ?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js'); ?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/wordcount/plugin.js'); ?>"></script>
    <script src="<?php echo base_url('assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js'); ?>"></script>
        <script>
        tinymce.init({
        selector: "textarea#elm1",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker toc",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern codesample"
        ],
        external_plugins: {
            //"moxiemanager": "/moxiemanager-php/plugin.js"
        },
        content_css: "css/development.css",
        add_unload_trigger: false,

        toolbar: "insertfile undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table codesample",

        //force_p_newlines : true,
        //forced_root_block : 'p',

        image_advtab: true,
        image_caption: true,

        style_formats: [
            {title: 'Bold text', format: 'h1'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        template_replace_values : {
            username : "Jack Black"
        },

        template_preview_replace_values : {
            username : "Preview user name"
        },

        link_class_list: [
            {title: 'Example 1', value: 'example1'},
            {title: 'Example 2', value: 'example2'}
        ],

        image_class_list: [
            {title: 'Example 1', value: 'example1'},
            {title: 'Example 2', value: 'example2'}
        ],

        templates: [
            {title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
            {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
        ],

        setup: function(ed) {
            /*ed.on(
                'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
                'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
                'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
                console.log(e.type, e);
            });*/
        },

        spellchecker_callback: function(method, data, success) {
            if (method == "spellcheck") {
                var words = data.match(this.getWordCharPattern());
                var suggestions = {};

                for (var i = 0; i < words.length; i++) {
                    suggestions[words[i]] = ["First", "second"];
                }

                success({words: suggestions, dictionary: true});
            }

            if (method == "addToDictionary") {
                success();
            }
        }
    });

    if (!window.console) {
        window.console = {
            log: function() {
                tinymce.$('<div></div>').text(tinymce.grep(arguments).join(' ')).appendTo(document.body);
            }
        };
    }
</script>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
</script>

<script src="<?php echo base_url('assets/resources/js/bet.js') ?>"></script>

   

<script> 
    $('.chosen-select').chosen({width: "100%"});

    $(".select2").select2();

    function getlink(){
     var method = $("#judul").val();
     var str = method.replace(/[^\w ]+/g,'').replace(/ +/g,'-');
     $('#link').val(str);
    }

    function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("inputImage").files[0]);
            oFReader.onload = function (oFREvent){
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
    };


</script> 

    <!-- Page-Level Scripts -->
<script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "../assets/inspinia/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });



</script>

<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>

<script id="script">
        //
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        //

        var url = '<?php if (isset($file)) { echo site_url('assets/upload/').$file; } ?>';

        var pdfDoc = null,
                pageNum = 1,
                pageRendering = false,
                pageNumPending = null,
                scale = 1.5,
                zoomRange = 0.25,
                canvas = document.getElementById('the-canvas'),
                ctx = canvas.getContext('2d');

        /**
         * Get page info from document, resize canvas accordingly, and render page.
         * @param num Page number.
         */
        function renderPage(num, scale) {
            pageRendering = true;
            // Using promise to fetch the page
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport(scale);
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function () {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            // Update page counters
            document.getElementById('page_num').value = num;
        }

        /**
         * If another page rendering in progress, waits until the rendering is
         * finised. Otherwise, executes rendering immediately.
         */
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num,scale);
            }
        }

        /**
         * Displays previous page.
         */
        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            var scale = pdfDoc.scale;
            queueRenderPage(pageNum, scale);
        }
        document.getElementById('prev').addEventListener('click', onPrevPage);

        /**
         * Displays next page.
         */
        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            var scale = pdfDoc.scale;
            queueRenderPage(pageNum, scale);
        }
        document.getElementById('next').addEventListener('click', onNextPage);

        /**
         * Zoom in page.
         */
        function onZoomIn() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale += zoomRange;
            var num = pageNum;
            renderPage(num, scale)
        }
        document.getElementById('zoomin').addEventListener('click', onZoomIn);

        /**
         * Zoom out page.
         */
        function onZoomOut() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale -= zoomRange;
            var num = pageNum;
            queueRenderPage(num, scale);
        }
        document.getElementById('zoomout').addEventListener('click', onZoomOut);

        /**
         * Zoom fit page.
         */
        function onZoomFit() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale = 1;
            var num = pageNum;
            queueRenderPage(num, scale);
        }
        document.getElementById('zoomfit').addEventListener('click', onZoomFit);


        /**
         * Asynchronously downloads PDF.
         */
        PDFJS.getDocument(url).then(function (pdfDoc_) {
            pdfDoc = pdfDoc_;
            var documentPagesNumber = pdfDoc.numPages;
            document.getElementById('page_count').textContent = '/ ' + documentPagesNumber;

            $('#page_num').on('change', function() {
                var pageNumber = Number($(this).val());

                if(pageNumber > 0 && pageNumber <= documentPagesNumber) {
                    queueRenderPage(pageNumber, scale);
                }

            });

            // Initial/first page rendering
            renderPage(pageNum, scale);
        });
    </script>




</body>

</html>