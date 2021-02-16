def maxProfit(price):
	
	n = len(price)
	cost = 0
	maxcost = 0

	if (n == 0):
		return 0

	minPrice = price[0]

	for i in range(n):
		
	
		minPrice = min(minPrice, price[i])

	
		cost = price[i] - minPrice

		maxcost = max(maxcost, cost)

	return maxcost


price = [ 7, 1, 5, 3, 6, 4 ]


print(maxProfit(price))

