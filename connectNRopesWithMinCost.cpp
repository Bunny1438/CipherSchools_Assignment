#include <bits/stdc++.h>

using namespace std;

struct MinHeap {
	unsigned size; // Current size of min heap
	unsigned capacity; // capacity of min heap
	int* harr; // Attay of minheap nodes
};

struct MinHeap* createMinHeap(unsigned capacity)
{
	struct MinHeap* minHeap = new MinHeap;
	minHeap->size = 0; // current size is 0
	minHeap->capacity = capacity;
	minHeap->harr = new int[capacity];
	return minHeap;
}

void swapMinHeapNode(int* a, int* b)
{
	int temp = *a;
	*a = *b;
	*b = temp;
}

void minHeapify(struct MinHeap* minHeap, int idx)
{
	int smallest = idx;
	int left = 2 * idx + 1;
	int right = 2 * idx + 2;

	if (left < minHeap->size
		&& minHeap->harr[left] < minHeap->harr[smallest])
		smallest = left;

	if (right < minHeap->size
		&& minHeap->harr[right] < minHeap->harr[smallest])
		smallest = right;

	if (smallest != idx) {
		swapMinHeapNode(&minHeap->harr[smallest], &minHeap->harr[idx]);
		minHeapify(minHeap, smallest);
	}
}

int isSizeOne(struct MinHeap* minHeap)
{
	return (minHeap->size == 1);
}

int extractMin(struct MinHeap* minHeap)
{
	int temp = minHeap->harr[0];
	minHeap->harr[0] = minHeap->harr[minHeap->size - 1];
	--minHeap->size;
	minHeapify(minHeap, 0);
	return temp;
}

void insertMinHeap(struct MinHeap* minHeap, int val)
{
	++minHeap->size;
	int i = minHeap->size - 1;
	while (i && (val < minHeap->harr[(i - 1) / 2])) {
		minHeap->harr[i] = minHeap->harr[(i - 1) / 2];
		i = (i - 1) / 2;
	}
	minHeap->harr[i] = val;
}

void buildMinHeap(struct MinHeap* minHeap)
{
	int n = minHeap->size - 1;
	int i;
	for (i = (n - 1) / 2; i >= 0; --i)
		minHeapify(minHeap, i);
}

struct MinHeap* createAndBuildMinHeap(
	int len[], int size)
{
	struct MinHeap* minHeap = createMinHeap(size);
	for (int i = 0; i < size; ++i)
		minHeap->harr[i] = len[i];
	minHeap->size = size;
	buildMinHeap(minHeap);
	return minHeap;
}
int minCost(int len[], int n)
{
	int cost = 0; // Initialize result

	struct MinHeap* minHeap = createAndBuildMinHeap(len, n);

	while (!isSizeOne(minHeap)) {
		int min = extractMin(minHeap);
		int sec_min = extractMin(minHeap);

		cost += (min + sec_min); // Update total cost
		insertMinHeap(minHeap, min + sec_min);
	}

	return cost;
}

int main()
{
	int len[] = { 4, 3, 2, 6 };
	int size = sizeof(len) / sizeof(len[0]);
	cout << "Total cost for connecting ropes is "
		<< minCost(len, size);
	return 0;
}
