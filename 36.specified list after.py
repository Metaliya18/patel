def remove_elements(lst):
    # Indices to remove
    indices_to_remove = {0, 2, 3, 5}
    # Create a new list with elements whose indices are not in indices_to_remove
    result = [elem for i, elem in enumerate(lst) if i not in indices_to_remove]
    return result

# Example usage:
my_list = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h']
new_list = remove_elements(my_list)
print("Original list:", my_list)
print("List after removal:", new_list)
