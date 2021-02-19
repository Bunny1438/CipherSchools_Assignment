class Node(object): 
	__slots__ = 'data', 'next'

	def __init__(self, data = None, next = None): 
		self.data = data 
		self.next = next

	def __repr__(self): 
		return repr(self.data) 

class LinkedList(object): 

	def __init__(self): 
		self.head = None

	def __repr__(self): 
		nodes = [] 
		curr = self.head 
		while curr: 
			nodes.append(repr(curr)) 
			curr = curr.next
		return '[' + ', '.join(nodes) + ']'

	def prepend(self, data): 
		self.head = Node(data = data, 
						next = self.head) 

	def reverse(self, k = 1): 
		if self.head is None: 
			return

		curr = self.head 
		prev = None
		new_stack = [] 
		while curr is not None: 
			val = 0
			
			while curr is not None and val < k: 
				new_stack.append(curr.data) 
				curr = curr.next
				val += 1

			while new_stack: 
				
				if prev is None: 
					prev = Node(new_stack.pop()) 
					self.head = prev 
				else: 
					prev.next = Node(new_stack.pop()) 
					prev = prev.next
					
		prev.next = None
		return self.head 

llist = LinkedList() 
llist.prepend(9) 
llist.prepend(8) 
llist.prepend(7) 
llist.prepend(6) 
llist.prepend(5) 
llist.prepend(4) 
llist.prepend(3) 
llist.prepend(2) 
llist.prepend(1) 

print("Given linked list") 
print(llist) 
llist.head = llist.reverse(3) 

print("Reversed Linked list") 
print(llist) 

