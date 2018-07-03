//javascript file for declarations using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('declarationsView', []);

app.controller ('declarationsCtrl', function($scope, $http) {

    this.declaration = {user:user, id:'', applicant_declaration:'', declaration_date:'', parent_declaration:'', parent_declaration_date:'', parent_consent:'', created_at:'', updated_at:'', student_id:''};
    this.update = {col_name:'', col_value:''};

    $scope.declaration_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"declarations", "data":this.declaration};
            save_declaration($scope, $http, pb);
        } else {
            var data = Object.assign(this.declaration, this.update);
            var pu = {"method":"update", "table":"declarations", "data":data};
            update_declaration($scope, $http, pu);
        }
    };

    $scope.declaration_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_declaration_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.declaration_delete = function(coln, colv){
        delete_declaration($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"declarations_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"declarations"}
    }).then((result) =>{
        $scope.declarations = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_declaration($scope, $http, pb){
    $http({
        url: base_api_url+"declarations_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function show_selected($scope, $http, column, value){
    $http({
        url: base_api_url+"declarations_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"declarations", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.declaration = result.data.declaration;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_declaration($scope, $http, pb){
    $http({
        url: base_api_url+"declarations_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_declaration($scope, $http, column, value){
    $http({
        url: base_api_url+"declarations_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"declarations", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

