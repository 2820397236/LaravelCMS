<form class="form-horizontal" action="{{ $form['url'] }}" method="{{ $form['method'] }}">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="{{ isset($form['_method'])? $form['_method'] : $form['method'] }}">

    <div class="form-group{!! ($errors->has('title')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="title">日志标题</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="title" value="{!! Request::old('title', $form['defaults']['title']) !!}" type="text" class="form-control" placeholder="Post Title">
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('summary')) ? ' has-error' : '' !!}">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="summary">日志摘要</label>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10">
            <input name="summary" value="{!! Request::old('summary', $form['defaults']['summary']) !!}" type="text" class="form-control" placeholder="Post Title">
            {!! ($errors->has('summary') ? $errors->first('summary') : '') !!}
        </div>
    </div>
    
    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!} ">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">日志正文</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
            <textarea name="body" type="text" class="form-control" data-provide="markdown" placeholder="Post Body" rows="10">{!! Request::old('body', $form['defaults']['body']) !!}</textarea>
            <!-- <div id="summernote">{!! Request::old('body', $form['defaults']['body']) !!}</div> -->
            {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        </div>
    </div>

    <div class="form-group{!! ($errors->has('body')) ? ' has-error' : '' !!} hidden">
        <label class="col-md-2 col-sm-3 col-xs-10 control-label" for="body">日志正文</label>
        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
        @include('UEditor::head')
        <div id="ueditor"></div>
        {!! ($errors->has('body') ? $errors->first('body') : '') !!}
        <script>
            var ue=UE.getEditor("ueditor");
            ue.ready(function(){
                //因为Laravel有防csrf防伪造攻击的处理所以加上此行
                ue.execCommand('serverparam','_token','{{ csrf_token() }}');
                ue.setContent( '{!! Request::old('body', $form['defaults']['body']) !!}');
            });

            ue.addListener( 'contentChange', function() {
                $('textarea[name=body]').html(ue.getContent());
                console.log(ue.getContent());
            });
        </script>
    </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-sm-offset-3 col-sm-10 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-rocket"></i> {!! $form['button'] !!}</button>
        </div>
    </div>

    

</form>
