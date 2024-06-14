let balance = 100000000000;
let totalCost = 0;
let itemCounts = {
    bigMac: 0
};

function updateBalance() {
    document.getElementById('balance').innerText = balance.toLocaleString();
}

function updateTotalCost() {
    document.getElementById('total-cost').innerText = totalCost.toLocaleString();
}

function updateItemCount(itemId) {
    document.getElementById(itemId + '-count').innerText = itemCounts[itemId];
}

function buyItem(itemId, price) {
    if (balance >= price) {
        balance -= price;
        totalCost += price;
        itemCounts[itemId]++;
        updateBalance();
        updateTotalCost();
        updateItemCount(itemId);
    } else {
        alert("Non puoi aggiungere altro!");
    }
}

function removeItem(itemId, price) {
    if (itemCounts[itemId] > 0) {
        balance += price;
        totalCost -= price;
        itemCounts[itemId]--;
        updateBalance();
        updateTotalCost();
        updateItemCount(itemId);
    } else {
        alert("Non puoi rimuovere altro!");
    }
}

// Initial balance and counts update
updateBalance();
updateTotalCost();
Object.keys(itemCounts).forEach(updateItemCount);
