const app = new Vue ( 
  {
    el: "#root",
    data: {
      disks: [],
    },
    mounted: function () {
      axios.get('http://localhost:8888/php-ajax-dischi/partials/api.php')
      .then( (reply) => {
        // aggiunta carte
        this.disks = reply.data;
      });
    },
  }
);