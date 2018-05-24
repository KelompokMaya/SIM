    <script>
    <?php foreach ($maps->result() as $row): ?>
      function initMap() {
        var uluru = {lat: <?php echo $row->lat ?>, lng: <?php echo $row->lng ?>};
        var map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    <?php endforeach; ?>
    </script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaxYs3Ln76Tl6kvdu4u44AuDd_VjqhFfA&callback=initMap">
  </script>