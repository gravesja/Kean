import sys

if len(sys.argv) != 5:
    print("Error: Please provide two numeric arguments, your name, and the date.")
    sys.exit(1)

try:
    num1 = float(sys.argv[1])
    num2 = float(sys.argv[2])
    name = sys.argv[3]
    date = sys.argv[4]
    result = num1 + num2
    print(f"The sum is: {result}")
    print(f"Calculated by: {name}")
    print(f"Date: {date}")
except ValueError:
    print("Error: The first two arguments must be numbers.")
    sys.exit(1)
