class Logs_users{

  constructor(){
    this.id = ''
    this.actionn = ''
    this.new_username = ''
    this.new_email = ''
    this.new_password = ''
    this.new_role = ''
    this.new_created_at = ''
    this.logs_cdate = ''
    this.logs_ctime = ''
    this.log_ByUser = ''
    this.timee = ''
    this.time = ''
    this.msg = ''
    this.error = ''
    this.token = ''
  }

  async add(){ try{ eval(await this.request('controller/logs_users.php?id=' + this.id + '&actionn=' + this.actionn + '&new_username=' + this.new_username + '&new_email=' + this.new_email + '&new_password=' + this.new_password + '&new_role=' + this.new_role + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&add=1')); }catch(err){}}
  async update(){ try{ eval(await this.request('controller/logs_users.php?id=' + this.id + '&actionn=' + this.actionn + '&new_username=' + this.new_username + '&new_email=' + this.new_email + '&new_password=' + this.new_password + '&new_role=' + this.new_role + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&update=1')); }catch(err){}}
  async delete(){ try{ eval(await this.request('controller/logs_users.php?id=' + this.id + '&delete=1')); }catch(err){}}
  async getLastRow(){ try{ eval(await this.request('controller/logs_users.php?getLastRow=1')); }catch(err){}}
  async getFirstRow(){ try{ eval(await this.request('controller/logs_users.php?getFirstRow=1')); }catch(err){}}
  async getById(){ try{ eval(await this.request('controller/logs_users.php?getById=' + this.id)); }catch(err){}}
  async getByActionn(){ try{ eval(await this.request('controller/logs_users.php?getByActionn=' + this.actionn)); }catch(err){}}
  async getByNew_username(){ try{ eval(await this.request('controller/logs_users.php?getByNew_username=' + this.new_username)); }catch(err){}}
  async getByNew_email(){ try{ eval(await this.request('controller/logs_users.php?getByNew_email=' + this.new_email)); }catch(err){}}
  async getByNew_password(){ try{ eval(await this.request('controller/logs_users.php?getByNew_password=' + this.new_password)); }catch(err){}}
  async getByNew_role(){ try{ eval(await this.request('controller/logs_users.php?getByNew_role=' + this.new_role)); }catch(err){}}
  async getByNew_created_at(){ try{ eval(await this.request('controller/logs_users.php?getByNew_created_at=' + this.new_created_at)); }catch(err){}}
  async getByLogs_cdate(){ try{ eval(await this.request('controller/logs_users.php?getByLogs_cdate=' + this.logs_cdate)); }catch(err){}}
  async getByLogs_ctime(){ try{ eval(await this.request('controller/logs_users.php?getByLogs_ctime=' + this.logs_ctime)); }catch(err){}}
  async getByLog_ByUser(){ try{ eval(await this.request('controller/logs_users.php?getByLog_ByUser=' + this.log_ByUser)); }catch(err){}}
  async getByTimee(){ try{ eval(await this.request('controller/logs_users.php?getByTimee=' + this.timee)); }catch(err){}}
  async getByTime(){ try{ eval(await this.request('controller/logs_users.php?getByTime=' + this.time)); }catch(err){}}
  // GET THE RESULT AS JSON
  async getBySet(value = 100000){ try{ return await this.request('controller/logs_users.php?id=' + this.id + '&actionn=' + this.actionn + '&new_username=' + this.new_username + '&new_email=' + this.new_email + '&new_password=' + this.new_password + '&new_role=' + this.new_role + '&new_created_at=' + this.new_created_at + '&logs_cdate=' + this.logs_cdate + '&logs_ctime=' + this.logs_ctime + '&log_ByUser=' + this.log_ByUser + '&timee=' + this.timee + '&time=' + this.time + '&getBySet=' + value); }catch(err){}}
  async getAll(value = 100000){ try{ return await this.request('controller/logs_users.php?getAll=' + value); }catch(err){}}
  async getAllReversed(value = 100000){ try{ return await this.request('controller/logs_users.php?getAllReversed=' + value); }catch(err){}}
  // GET AS TEXT
  async getNumberOfRows(){ try{ return await this.request('controller/logs_users.php?getNumberOfRows=1'); }catch(err){}}

  // SETTER METHODS
  setId(id){ this.id = id; }
  setActionn(actionn){ this.actionn = actionn; }
  setNew_username(new_username){ this.new_username = new_username; }
  setNew_email(new_email){ this.new_email = new_email; }
  setNew_password(new_password){ this.new_password = new_password; }
  setNew_role(new_role){ this.new_role = new_role; }
  setNew_created_at(new_created_at){ this.new_created_at = new_created_at; }
  setLogs_cdate(logs_cdate){ this.logs_cdate = logs_cdate; }
  setLogs_ctime(logs_ctime){ this.logs_ctime = logs_ctime; }
  setLog_ByUser(log_ByUser){ this.log_ByUser = log_ByUser; }
  setTimee(timee){ this.timee = timee; }
  setTime(time){ this.time = time; }
  // GETTER METHODS
  getId(){ return this.id; }
  getActionn(){ return this.actionn; }
  getNew_username(){ return this.new_username; }
  getNew_email(){ return this.new_email; }
  getNew_password(){ return this.new_password; }
  getNew_role(){ return this.new_role; }
  getNew_created_at(){ return this.new_created_at; }
  getLogs_cdate(){ return this.logs_cdate; }
  getLogs_ctime(){ return this.logs_ctime; }
  getLog_ByUser(){ return this.log_ByUser; }
  getTimee(){ return this.timee; }
  getTime(){ return this.time; }
  getMsg(){ return this.msg; }

  // REQUEST METHOD USING JQUERY
  async request(url){
    this.token = await $.ajax({ url: 'controller/logs_users.php', type: 'GET' });
    url = url + '&token=' + this.token;
    return $.ajax({ url: url, type: 'GET' });
  };
}
