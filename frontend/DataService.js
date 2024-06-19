export default class DataService {
  constructor() {}
  getData(url, callback) {
    axios({
      method: "get",
      url: url,
    })
      .then((response) => {
        console.log(response.data);
        callback(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }
}
