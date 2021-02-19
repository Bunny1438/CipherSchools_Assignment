class Solution:
    def reorderList(self, head: ListNode) -> None:
        if head==None:
            return head
        slow=head
        fast=head
        while(fast!=None and fast.next!=None):
            slow=slow.next
            prev=fast.next
            fast=fast.next.next
        if fast==None:
            fast=prev
        mid=slow
        prev=slow
        slow=slow.next
        while(slow!=None):
            node=slow
            slow=slow.next
            node.next=prev
            prev=node
        while(fast!=mid):
            node1=head
            head=head.next
            node2=fast
            fast=fast.next
            node1.next=node2
            node2.next=head
        fast.next=None