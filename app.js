var pp = angular.module("myModule", [])
				.controller("myController", function($scope, $http, $timeout){
console.log("clicked");
					$http.get('select.php').then(function(response){
						$scope.members = response.data;
					});

					$scope.insertData = function(){
						$http.post("insert.php", {name: $scope.name, email: $scope.email,phone:$scope.phone,comments: $scope.comments})
						.then(function(){
							$scope.message = "Successfully Submit!";
							$scope.msgBox = true;
							$scope.name = "";
							$scope.email = "";
							$scope.phone = "";
							$scope.comments = "";
							$timeout(function(){
								$scope.msgBox = false;
							}, 2000);
							$scope.selectData();
						});
					}

					$scope.selectData = function(){
						$http.get('select.php').then(function(response){
							$scope.members = response.data;
						});
					}
					$scope.btnInsert = true;
					$scope.deleteData = function(mem_id){
										$http.post("delete.php", {mem_id: mem_id})
										.then(function(){
											$scope.message = "Successfully Deleted";
											$scope.messageStatus = "alert alert-danger";
											$scope.msgBox = true;
											$timeout(function(){
												$scope.msgBox = false;
											}, 1000);
											$scope.selectData();
										});
									}
								$scope.updateData = function(mem_id){
									$scope.btnUpdate = false;
									$scope.btnInsert = true;
									$http.post("update.php", {mem_id: $scope.mem_id,name: $scope.name,email: $scope.email,phone:$scope.phone,comments: $scope.comments})
									.then(function(response){
										$scope.name = "";
										$scope.email = "";
										$scope.phone = "";
										$scope.comments = "";
										$scope.message = "Successfully Updated";
										$scope.messageStatus = "alert alert-success";
										$scope.msgBox = true;
										$timeout(function(){
											$scope.msgBox = false;
										}, 1000);
										$scope.selectData();
									});
								}

								$scope.updateBtn = function(name,phone,email,comments){
                console.log("clicked");
									$scope.btnInsert = false;
									$scope.btnUpdate = true;
									$scope.name = name;
									$scope.email = email;
									$scope.phone = phone;
                  $scope.comments = comments;

								}
				});
