<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Calculator</title>
</head>

<body>
    <main class="mx-auto">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full max-w-xs">
                    <form method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="numberOne">
                                first Number
                            </label>
                            <input name="number1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numberOne" type="number" placeholder="Enter the first Number" />
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="operator">
                                Operator
                            </label>
                            <select name="operator" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="operator">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="numberTwo">
                                second Number
                            </label>
                            <input name="number2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="numberTwo" type="number" placeholder="Enter the second Number" />
                        </div>
                        <div class="flex items-center justify-between">
                            <button name="submit" class="bg-blue-500 hover :bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Calculate Result
                            </button>
                            <button name="delsum" class="bg-red-500 hover :bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Del Sum
                            </button>
                        </div>
                    </form>

                    <?php
                    require_once "calculator.tpl.php";
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>