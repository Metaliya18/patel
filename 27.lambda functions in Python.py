# 1) Simple lambda function to add two numbers
add = lambda x, y: x + y
print("Add 5 + 3 =", add(5, 3))

# 2) Lambda function with no arguments
greet = lambda: "Hello, World!"
print("Greeting:", greet())

# 3) Lambda function used inside another function
def apply_func(f, value):
    return f(value)

result = apply_func(lambda x: x * x, 6)  # Squares the value
print("Square of 6 =", result)

# 4) Using lambda with map() to double elements in a list
numbers = [1, 2, 3, 4, 5]
doubled = list(map(lambda x: x * 2, numbers))
print("Doubled numbers:", doubled)

# 5) Using lambda with filter() to get even numbers
evens = list(filter(lambda x: x % 2 == 0, numbers))
print("Even numbers:", evens)

# 6) Using lambda with sorted() to sort based on the length of strings
words = ["apple", "banana", "pear", "kiwi", "strawberry"]
sorted_words = sorted(words, key=lambda x: len(x))
print("Words sorted by length:", sorted_words)
