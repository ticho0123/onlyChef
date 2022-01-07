  <footer class="footer">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content">
                    <p><b>ChefTalk</b> - All Right Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js"></script>
    <script>
        $(document).ready(function() {
            $( ".tombol-like" ).click(function() {
                var id = $(this).attr('data-id');

                $.ajax({
                    url: `<?php echo base_url('article/like/') ?>/${id}`,
                    type: "post",
                    success: function (response) {
                        console.log(response);
                        location.reload();                     
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log(textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
        <?php if( base_url(uri_string()) == base_url('artikel') ): ?>

            // get users
            var json =  '<?php echo json_encode($users); ?>';
            var obj = JSON.parse(json);

            var users = [];

            for (let i = 0; i < obj.length; i++) {
              users.push(obj[i]['nama_depan']);
            }

            // get likes
            var jsonLikes =  '<?php echo json_encode($likes); ?>';
            var objLikes = JSON.parse(jsonLikes);

            var likes = [];

            for (let i = 0; i < objLikes.length; i++) {
              likes.push(objLikes[i]['total_likes']);
            }

            const labels = users;
            const data = {
              labels: labels,
              datasets: [{
                label: 'Statistik Artikel',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: likes,
              }]
            };

            const config = {
              type: 'bar',
              data,
              options: {
                indexAxis: 'y',
              }
            };

            var myChart = new Chart(
               document.getElementById('myChart'),
               config
            ); 

        <?php endif ?>
    </script>
</body>

</html>