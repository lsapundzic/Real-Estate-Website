const Properties = {
  id: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
  name: [
    `Struga Castle`,
    `Škofija Novo mesto`,
    `Žužemberk Castle`,
    `Hotel Sport Otočec`,
    `Mokrice Castle`,
    `Otočec Castle`,
    `Hmeljnik Castle`,
    `B&B Vila Otočec`,
    `Soteska Castle`,
    `Štrlek Castle Ruins`,
  ],
  region: [
    `Dolenjska`,
    `Dolenjska`,
    `Gorenjska`,
    `Gorenjska`,
    `Ljubljana`,
    `Ljubljana`,
    `Primorska`,
    `Primorska`,
    `Maribor`,
    `Maribor`,
  ],
  price: [`800,000`, `3,400,000`, `1,200,000`, `70,000`, `45,000`],
  bedrooms: [3, 120, 30, 1, 4],
};

var myJSONdata = JSON.stringify(Properties);

console.log(myJSONdata);
