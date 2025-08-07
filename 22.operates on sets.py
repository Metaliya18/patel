# Sample sets
set_a = {1, 2, 3, 4}
set_b = {3, 4, 5, 6}

print("Initial sets:")
print("set_a:", set_a)
print("set_b:", set_b)
print()

# i) add() - Add a single element to the set
set_a.add(7)
print("After add(7) to set_a:", set_a)

# ii) update() - Add multiple elements from another iterable
set_a.update([8, 9])
print("After update([8, 9]) to set_a:", set_a)

# iii) copy() - Create a shallow copy of the set
set_c = set_a.copy()
print("Copy of set_a (set_c):", set_c)

# iv) pop() - Remove and return an arbitrary element
popped_element = set_a.pop()
print("Popped element from set_a:", popped_element)
print("set_a after pop():", set_a)

# v) remove() - Remove a specific element (raises KeyError if not found)
set_a.remove(8)
print("After remove(8) from set_a:", set_a)

# vi) discard() - Remove a specific element if present (no error if not found)
set_a.discard(100)  # No error even though 100 is not in set
print("After discard(100) from set_a (no error if element not found):", set_a)

# vii) clear() - Remove all elements from the set
set_c.clear()
print("After clear() set_c:", set_c)

# viii) union() - Return union of two sets
union_set = set_a.union(set_b)
print("Union of set_a and set_b:", union_set)

# ix) intersection() - Return intersection of two sets
intersection_set = set_a.intersection(set_b)
print("Intersection of set_a and set_b:", intersection_set)

# x) difference() - Return elements in set_a but not in set_b
difference_set = set_a.difference(set_b)
print("Difference of set_a - set_b:", difference_set)
