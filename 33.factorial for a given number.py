def factorial(n):
    if n < 0:
        print("Factorial is not defined for negative numbers.")
        return None
    if n == 0 or n == 1:
        return 1
    else:
        return n * factorial(n - 1)

# Example usage:
number = 5
result = factorial(number)
if result is not None:
    print(f"The factorial of {number} is {result}")
