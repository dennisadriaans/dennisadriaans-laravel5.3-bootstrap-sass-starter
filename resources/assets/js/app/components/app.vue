<template>
    <div>
        123
    </div>
</template>

<script>

    export default {
        mounted() {
            this.hideAlert();
        },
        data() {
            return {
                bles: 'sdfsdf'
            }
        },
        computed: {
        },
        methods: {
            hideAlert() {
                let alerts = document.getElementsByClassName('alert');
                setTimeout(() => {
                    while(alerts.length > 0){

                        /* Make an animate .sass sheet en add class for fadeOut */ //TODO
                        alerts[0].remove();
                    }
                }, 3000);
            }
        }
    }
</script>