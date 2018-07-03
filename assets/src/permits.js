//javascript file for permits using angularjs for data-binding.
var base_api_url = "http://localhost:8085/educaredb/api/";
var user = local_store({}, "educare-user", "get");
var app = angular.module('permitsView', []);

app.controller ('permitsCtrl', function($scope, $http) {

    this.permit = {user:user, id:'', access:'', access_person:'', emergence_person:'', access_person_phone:'', access_person_address:'', created_at:'', updated_at:'', student_id:''};
    this.update = {col_name:'', col_value:''};

    $scope.permit_save = function() {
        if (this.update == undefined) {
            var pb = {"method":"save", "table":"permits", "data":this.permit};
            save_permit($scope, $http, pb);
        } else {
            var data = Object.assign(this.permit, this.update);
            var pu = {"method":"update", "table":"permits", "data":data};
            update_permit($scope, $http, pu);
        }
    };

    $scope.permit_view_single = function(coln, colv){
        show_selected($scope, $http, coln, colv);
    };

    $scope.do_permit_update = function(colname, colvalue){
        $scope.update = {"col_name":colname, "col_value":colvalue};
        show_selected($scope, $http, colname, colvalue);
    };

    $scope.permit_delete = function(coln, colv){
        delete_permit($scope, $http, coln, colv);
    };

    $http({
        url: base_api_url+"permits_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"permits"}
    }).then((result) =>{
        $scope.permits = result.data;
    }, function(error){
        $scope.berror = error.statusText;
    });

});

function save_permit($scope, $http, pb){
    $http({
        url: base_api_url+"permits_http_api.php",
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
        url: base_api_url+"permits_http_api.php",
        method: "POST",
        data:{"method":"view", "table":"permits", "data":{"col_name":column, "col_value":value}}
    }).then((result) =>{
        $scope.permit = result.data.permit;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function update_permit($scope, $http, pb){
    $http({
        url: base_api_url+"permits_http_api.php",
        method: "POST",
        data:pb
    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

function delete_permit($scope, $http, column, value){
    $http({
        url: base_api_url+"permits_http_api.php",
        method: "POST",
        data:{"method":"delete", "table":"permits", "data":{"col_name":column, "col_value":value}}    }).then((result) =>{
        $scope.berror = result.data.msg;
    }, function(error){
        $scope.berror = error.statusText;
    });
}

