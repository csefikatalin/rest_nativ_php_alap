import DataService from "./DataService.js";

const DS = new DataService();
DS.getData("http://localhost:8080/items", megjelenit);
function megjelenit(data) {
  console.log(data);
}
