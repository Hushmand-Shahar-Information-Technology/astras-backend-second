function toggleVisibility() {
    const div = document.getElementById("myDiv");
    div.classList.toggle("hidden");
}

// Print functionality
        function printTable() {
            // Create a clean container for printing
            var printContainer = $("<div>").addClass("print-container").css({
                "position": "fixed",
                "left": "-9999px"
            });

            // Clone header and make it visible
            var headerClone = $(".print-header").clone().css("display", "block");

            // Fix image URLs to absolute paths
            headerClone.find("img").each(function () {
                var img = $(this);
                var imgSrc = img.attr("src");

                // Make sure all image paths are absolute
                if (imgSrc) {
                    // If it's a relative path starting with /storage or /images
                    if (imgSrc.startsWith('/storage/') || imgSrc.startsWith('/images/')) {
                        img.attr("src", window.location.origin + imgSrc);
                    }
                    // If it's a path without a leading slash
                    else if (!imgSrc.startsWith('http') && !imgSrc.startsWith('/')) {
                        img.attr("src", window.location.origin + '/' + imgSrc);
                    }
                    // If it has localhost or 127.0.0.1 in the URL
                    else if (imgSrc.indexOf('127.0.0.1') >= 0 || imgSrc.indexOf('localhost') >= 0) {
                        // Extract the path after the domain
                        var pathParts = imgSrc.split(/localhost:\d+|127\.0\.0\.1:\d+/);
                        if (pathParts.length > 1) {
                            img.attr("src", window.location.origin + pathParts[1]);
                        }
                    }
                }

                // Add error handler for images
                img.on('error', function () {
                    console.log('Image failed to load: ' + img.attr('src'));
                });
            });

            // Clone the table
            var tableClone = $(".custom-table").clone();

            // Add elements to print container
            printContainer.append(headerClone);
            printContainer.append(tableClone);

            // Add to document for printing
            $("body").append(printContainer);

            // Add print style
            var $printStyle = $("<style>").text(`
        @media print {
            * { visibility: hidden !important; }
            .print-container, .print-container * { visibility: visible !important; }
            .print-container {
                position: absolute !important;
                left: 0 !important;
                top: 0 !important;
                width: 100% !important;
                background: white !important;
            }
            .print-container .print-header {
                display: block !important;
                margin-bottom: 20px !important;
            }
            .print-container .print-header img {
                display: inline-block !important;
                visibility: visible !important;
            }
            .print-container table {
                width: 100% !important;
                border-collapse: collapse !important;
                direction: rtl !important;
            }
            .print-container table th, .print-container table td {
                border: 1px solid black !important;
                padding: 8px !important;
                text-align: right !important;
            }
        }
    `);

            $("head").append($printStyle);

            // Use a timeout to ensure everything has rendered before printing
            setTimeout(function () {
                // Try direct window.print() approach
                window.print();

                // Remove temporary elements after printing
                setTimeout(function () {
                    printContainer.remove();
                    $printStyle.remove();
                }, 1000);
            }, 500);
        }

