# PDFfiller JS-React-School Entrance Tasks

## Hello everyone.

This repository serves as a template for your solutions to the entrance tasks
for the JS-React developer school.

To complete the tasks, you will need to install the following software on your computer:
   1. `git`
   1. `git bash` (*for Windows users*)
   1. `php`, version 7.1 or higher (7.2 recommended)
   1. A code editor or an integrated development environment


You can read the task descriptions in the corresponding `README` files:
 - **Task 1**. [Spiral matrix](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-1/README.md)
 - **Task 2**. [Identical elements](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-2/README.md)
 - **Task 3**. [Implement the `Publish-Subscribe` design pattern](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-3/README.md)


## How to complete the tasks

All instructions in this section assume that the tasks will be completed on `Linux`, `MacOS` or `Windows 10` (with `git bash` as the command line).

### 1. Copy the project

There are two ways to copy the project:
 - fork this repository
 - create a new repository and initialize it with the code from this one

We **STRONGLY ASK** you not to fork, because that would spoil the solutions for others who want to solve the entrance tasks.

To copy the repository, follow these steps:

  1. [create a new repository on github](https://github.com/new) named `<your-name>-tasks`
  1. clone this repository to your computer:
      ```shell
      git clone git@github.com:pdffiller/react-school-entrants-tasks-php.git school-tasks
      cd school-tasks
      ```
  1. copy the url of the repository you created in step 1.

      ![copy git url](https://help.github.com/assets/images/help/repository/remotes-url.png)
  
  1. reinitialize the local git repository:
      ```shell
      rm -rf .git
      git init
      git remote add origin <your-repository-url> # paste the copied link
      ```
  
  1. Push the code of this repository to your repository on `github`:
      ```shell
      git add .
      git commit -m "Initial commit"
      git push origin master
      ```

### 2. Install the project dependencies

Just run the command:

```shell
make install
```

### 3. Write your solutions

Open the project in your code editor (or integrated development environment), go to the task folder (`./task1`, `./task2` or `./task3`), and make the necessary changes to the `index.php` file.

Please take into account the function/method specifications that accompany the code of the solution template.

For example, the template for task 1 looks like this:
```php
/**
 * Creates an n * n matrix and fills it in a spiral
 *
 * @param int {Number} n - matrix dimension
 * @returns array {Number[n][n]} - n * n matrix filled in a spiral
 */
function fillSpiralMatrix($n)
{
    $result = [];

    // Your code

    return $result;
}

```

The specification means that the `fillSpiralMatrix` function takes one numeric argument `n` and returns a square numeric matrix of size `n` x `n`.


### 4. Run the tests

```shell
make test-1 # or test-2, test-3 respectively
```

If the task is solved correctly, you will see a result roughly like this:

```
php vendor/bin/codecept run unit task1
Codeception PHP Testing Framework v2.4.2
Powered by PHPUnit 6.5.8 by Sebastian Bergmann and contributors.

Unit Tests (6) -----------------------------------------------------------------
✔ TaskTest: Array diff feature | "=> (task 1 - fill spiral matrix n = 1)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 5)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 6)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 10)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 20)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 1000)" (0.40s)
--------------------------------------------------------------------------------


Time: 711 ms, Memory: 116.00MB

OK (6 tests, 6 assertions)
```

### 5. Commit your changes and push them to `github`

At a minimum, push your solution to `github` after solving each task. To do this, run:

```shell
git add .
git commit -m "Task-1 solution" # or another message describing the changes
git push origin master
```

### 6. Send your solution to `PDFfiller`

Once you have solved all the tasks, please send a link to your repository page to `PDFfiller`.

Before sending, make sure that you have pushed everything to `github` and that all tests pass:

```shell
cd ~/
git clone <your-repository-url> school-task-test
cd school-task-test
make install
make test
```

If all tests pass, send the link to your repository page by email:<br/>
[js-school@pdffiller.com](mailto:js-school@pdffiller.com?subject=JS%20School%20Entrants%20Tasks)

### 7. Report a problem

If something goes wrong while completing the tasks, [report an issue](https://github.com/pdffiller/react-school-entrants-tasks-php/issues/new) in this repository on github.