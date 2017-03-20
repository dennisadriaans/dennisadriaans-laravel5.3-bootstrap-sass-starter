
<script>
    export default {
        data: function() {
            return {
                edit: false,
                list: [],
                task: {
                    id: '',
                    body: ''
                }
            };
        },

        ready: function() {
            this.fetchTaskList();
        },

        methods: {
            fetchTaskList: function() {
                this.$http.get('api/tasks').then(function (response) {
                    this.list = response.data
                });
            },

            createTask: function () {
                this.$http.post('api/task/store', this.task)
                this.task.body = ''
                this.edit = false
                this.fetchTaskList()
            },

            updateTask: function(id) {
                this.$http.patch('api/task/' + id, this.task)
                this.task.body = ''
                this.edit = false
                this.fetchTaskList()
            },

            showTask: function(id) {
                this.$http.get('api/task/' + id).then(function(response) {
                    this.task.id = response.data.id
                    this.task.body = response.data.body
                })
                this.$els.taskinput.focus()
                this.edit = true
            },

            deleteTask: function (id) {
                this.$http.delete('api/task/' + id)
                this.fetchTaskList()
            },
        }
    }
</script>