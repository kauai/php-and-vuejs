// const promise = fetch('./api.php',{method:'POST'})
const promise = fetch("./api.php?id=3");

promise.then(async item => {
  const data = await item.json();
      if (item.status == 422) {
          console.log(data.msg);
      } else {
          console.log(data);
      }
});
