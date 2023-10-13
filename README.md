### project idea
1. user can watch the task list(description,begin_date,end_date) and change status
2. user can create new job with default status is not_started
3. user can change description begin_date and end_date
4. if empty or begin_date>end_date return exception
5. when user delete, via warning form javascrip

### table 
1. to_do_list - id(INT)
                , Desciption(TEXT)
                , begin_date(date)
                , end_date(date)
                , status(done,not started{default})