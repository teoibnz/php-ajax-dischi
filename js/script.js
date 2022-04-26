const app = new Vue({
    el: '#app',
    data: {
        discs : []
    },
    mounted(){
        axios
        .get('http://localhost:8888/php-ajax-dischi/server/controller.php')
        .then((response) => {
            this.discs = response.data.results;
        }).catch((error) => {
            console.warn(error);
        });
    }
})