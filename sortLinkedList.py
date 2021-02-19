class Solution:
    def sortList(self, head: ListNode) -> ListNode:
        
        nodes = []
        while head:
            nodes.append(head)
            head = head.next
        nodes.sort(key=lambda n: n.val)
        nodes.append(None)
        fh = ListNode()
        pre = fh
        for n in nodes:
            pre.next = n
            pre = n
        return fh.next