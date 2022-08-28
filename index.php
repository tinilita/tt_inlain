<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>search</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
<div class="container" id="searchApp">
    <br />
    <h3 align="center">Поиск</h3>
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-9">
                    <h3 class="panel-title">Данные</h3>
                </div>
                <div class="col-md-3" align="right">
                    <input type="text" class="form-control input-sm" placeholder="Search" v-model="query" @keyup="fetchData()" />
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                    <tr v-for="row in allData">
                        <td>{{ row.title }}</td>
                        <td>{{ row.body }}</td>
                    </tr>
                    <tr v-if="nodata">
                        <td colspan="2" align="center">Данные не найдены</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script>

    var application = new Vue({
        el:'#searchApp',
        data:{
            allData:'',
            query:'',
            nodata:false
        },
        methods: {
            fetchData:function(){
                axios.post('select.php', {
                    query:this.query
                }).then(function(response){
                    if(response.data.length > 0)
                    {
                        application.allData = response.data;
                        application.nodata = false;
                    }
                    else
                    {
                        application.allData = '';
                        application.nodata = true;
                    }
                });
            }
        },
        created:function(){
            this.fetchData();
        }
    });

</script>
